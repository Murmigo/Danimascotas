/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package codigo;

import java.sql.DriverManager;
import javax.faces.bean.ManagedBean;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.faces.bean.RequestScoped;
/**
 *
 * @author Virtus
 */
@ManagedBean
@RequestScoped
public class main {

    private Statement estado;
    private ResultSet resultadoConsulta;
    private Connection conexion;
    
    public main() {
        try{
            Class.forName("com.mysql.jdbc.Driver");
            conexion = DriverManager.getConnection("jdbc:mysql://127.0.0.1/test", "root", "");
            estado = conexion.createStatement();
            resultadoConsulta = estado.executeQuery("Select * from Pruebas");
            
            /*while(resultadoConsulta.next()){
                PokemonValues pkm = new PokemonValues();
                pkm.nombre = resultadoConsulta.getString(2);
                pkm.generation_id = resultadoConsulta.getInt(5);
                pkm.evolution_chain_id = resultadoConsulta.getInt(6);
                pkm.species= resultadoConsulta.getString(12);
                pkm.height =resultadoConsulta.getInt(10);
                pkm.weight = resultadoConsulta.getInt(11);
                pkm.habitat = resultadoConsulta.getString(15);
            
            listaPokemon.put(resultadoConsulta.getString(1), pkm);
            }
            */
        }
        catch (Exception e){
            System.err.println("No hay Conexion por: " +e);
        }
    }
    
}
