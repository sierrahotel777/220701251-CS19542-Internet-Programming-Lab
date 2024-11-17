package connect;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Connect
 */
@WebServlet("/Connect")
public class Connect extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Connect() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
		response.setContentType("text/html");

		PrintWriter out = response.getWriter();

		try {

		Class.forName("com.mysql.cj.jdbc.Driver");

		String URL = "jdbc:mysql://localhost:3306/ajaxdb";
		//String URL = "jdbc:mysql://localhost:3306/ajaxdb?useSSL=false&allowPublicKeyRetrieval=true";

		Connection conn = DriverManager.getConnection(URL, "root", "");
		
		String regno = request.getParameter("m1");
				
				PreparedStatement ps=conn.prepareStatement("select * from student where reg_no=?");

				 ps.setString(1, regno);
				 
				ResultSet rs=ps.executeQuery();

						out.println("<center><h1>student Details</h1></center>");

						out.println("<hr>");
						out.println("<table border='1'>");
			            out.println("<tr><th>NAME</th><th>REG_NO</th><th>DEPT</th><th>CLASS</th></tr>");

						while (rs.next()) {
							out.println("<tr>");
					
				                out.println("<td>" + rs.getString("name") + "</td>");
				                out.println("<td>" + rs.getString("reg_no") + "</td>");
				                out.println("<td>" + rs.getString("dept") + "</td>");
				                out.println("<td>" + rs.getString("class") + "</td>");
						
						out.println("</tr>");

						}
						 out.println("</table>");
						 rs.close();
				          ps.close();
						conn.close();
						
				

				} catch (Exception e) {
					out.println(e);
				}
	}

}
