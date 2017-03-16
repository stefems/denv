package com.denverted;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

import com.denverted.eventPackage.Event;
import com.denverted.loggerPackage.Logger;

import java.sql.PreparedStatement;

public class UpdateDBViaTicketFly {

	private static Logger myLogger = null;
	
	public static void main(String[] args) {
		
		//begin logging
		myLogger = new Logger();
		myLogger.beginLogEntry();
		//call getEventMasterList on this guy to get the events.
		ReadTicketFlyHTML singleton = new ReadTicketFlyHTML(myLogger);
		try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            /* This is the URL for connecting when outside the server */
            String url = URLEXTERNAL;
            /* This is for local */
            //String url = URLINTERNAL  ;
            Connection con = DriverManager.getConnection(url);
            if (con != null) {
            	myLogger.addGoodMessage("Connected to mysql server.");
            	//TODO New code to insert events
            	insertEventsIntoTable(con, singleton);
            }
            else {
            	myLogger.addErrorMessage("Connection to mysql failed because the connection returned was null.");
            }
        }
		catch (Exception ex) {
        	System.out.println(ex.getMessage());
        	myLogger.addErrorMessage("There was an exception thrown by the code connecting to mysql.");
        }
		myLogger.closeLogger();
	}

	private static void insertEventsIntoTable(Connection connArg, ReadTicketFlyHTML dataArg) throws SQLException {
		
		ArrayList<Event> eventList = dataArg.getEventMasterList();
		//Need to delete the rows from the database
		
		try {
			//clearing out the row before insertion
			String deleteTableSQL = "delete from event_table0";
			PreparedStatement DeleteSt = connArg.prepareStatement(deleteTableSQL);
			DeleteSt.executeUpdate();
		}
		catch (SQLException e) {
			System.out.println(e.getMessage());
			myLogger.addErrorMessage("Failed to clear out the event table in the database.");
		}
		int eventsAdded = 0;
		//for each event in the master list
		for (Event currentEvent : eventList) {
			//if the insertion of the event works, increment the counter
			if (insertEventIntoTable(currentEvent, connArg)) {
				eventsAdded++;
			}
		}
		myLogger.addGoodMessage("Finished inserting " + eventsAdded + " events out of " + eventList.size() + " total events found.");
	}
	
	public static boolean insertEventIntoTable(Event eventArg, Connection connArg) {
		

		//The table is event_table0, there are 11 cols, the first not to be edited
		String insertTableSQL = "INSERT INTO event_table0"
				+ "(id, eventTime, ageLimit, eventTitle, eventOpeners,"
				+ "eventVenue, eventLink, eventCost, fromCO, eventGenre,"
				+ "eventDescription) VALUES"
				+ "(null,?,?,?,?,?,?,?,?,?,?)";

		try {
			
			PreparedStatement InsertSt = connArg.prepareStatement(insertTableSQL);
			//TODO: modify to setDate after you modify the eventTime instance variable in the eventClass to a Date object
			InsertSt.setDate(1, eventArg.getEventDateAndTime());
			InsertSt.setString(2, eventArg.getAgeLimit());
			InsertSt.setString(3, eventArg.getEventTitle());
			//InsertSt.setString(4, eventArg.getEventOpeners());
			InsertSt.setString(4, "openerplaceholder");
			InsertSt.setString(5, eventArg.getEventVenue());
			InsertSt.setString(6, eventArg.getEventLink());
			InsertSt.setString(7, eventArg.getEventCost());
		    /*if (eventArg.isFromCO()) {
		    	InsertSt.setString(8, "T");
		    }
		    else {
		    	InsertSt.setString(8, "F");
		    }*/
			InsertSt.setString(8, "F");
		    //InsertSt.setString(9, eventArg.getEventGenre());
		    //InsertSt.setString(10, eventArg.getEventDescription());
			InsertSt.setString(9, "genre p");
			InsertSt.setString(10, "desc p");
		    InsertSt.executeUpdate();
		    InsertSt.close();
		    return true;
		}
		catch (SQLException e) {
			System.out.println(e.getMessage());
			myLogger.addErrorMessage("Event " + eventArg.getEventTitle() + " failed to be inserted.");
			return false;
		}
	}
}
