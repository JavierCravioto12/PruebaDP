/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package conexionSQL;

import com.mysql.jdbc.Connection;
import java.sql.DriverManager;
import javax.swing.JOptionPane;


/**
 *
 * @author javie
 */
public class conexionSQL {
    
   Connection conectar = null;
    
   public Connection conexion(){
   
       try {
         Class.forName("com.mysql.jdbc.Driver");
         conectar=(Connection) DriverManager.getConnection("jdbc:mysql://localhost:3307/practica_dp","root","");
         
         JOptionPane.showMessageDialog(null,"Conexion a la base de datos exitosa");
       } catch (Exception e) {
           
           JOptionPane.showInternalMessageDialog(null,"Error Conexion "+e.getMessage());
       }
       
       return conectar;
   }
}
