/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package codigo;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
/**
 *
 * @author Virtus
 */
@Entity
@Table(name="Mascotas")
public class Mascotas implements Serializable{
    @Id
    @GeneratedValue(strategy=GenerationType.AUTO)
    @Column(name="mascotaId")
    private long mascotaId;
    
    @Column(name="name")
    private String name;
    
    @Column(name="description")
    private String description;
    
    public Mascotas(){
        
    }
    
    public Mascotas(long _mascotaId, String _name, String _description){
        mascotaId = _mascotaId;
        name = _name;
        description = _description;
    }
    
    public long getMascotaId(){
        return mascotaId;
    }
    
    public void setMascotaId(long _mascotaId){
        mascotaId = _mascotaId;
    }
    
    public String getName(){
        return name;
    }
    
    public void setName(String _name){
        name = _name;
    }
    
    public String getDescription(){
        return description;
    }
    
    public void setDescription(String _description){
        description = _description;
    }
}
