package com.ready.dev;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class GServlet extends HttpServlet {
	// ===============================================
	public void doGet(HttpServletRequest request, HttpServletResponse response) 
    throws ServletException, IOException {
		response.setContentType("text/html");
		response.setCharacterEncoding("UTF-8");
		PrintWriter lPrintWriter = response.getWriter();
		lPrintWriter.println("<!DOCTYPE html>");
		lPrintWriter.println("<html>");
		lPrintWriter.println("<head>");
		lPrintWriter.println("<meta charset=\"utf-8\" />");
		lPrintWriter.println("<title>JavaEE | ReadyDev</title>");
		lPrintWriter.println("</head>");
		lPrintWriter.println("<body>");
		lPrintWriter.println("<h1>Servlet</h1>");
		lPrintWriter.println("<p>Bonjour tout le monde</p>");
		lPrintWriter.println("</body>");
		lPrintWriter.println("</html>");
	}
	// ===============================================
}
