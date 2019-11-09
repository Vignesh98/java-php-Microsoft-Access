
package javaClientforPHPService;
import com.sun.jersey.api.client.Client;
import com.sun.jersey.api.client.ClientResponse;
import com.sun.jersey.api.client.WebResource;
import java.util.Scanner;
/**
 *
 * @author Vignesh
 */
public class prescription_client {
 
 public static void main(String [] args)
 {
 Client client = Client.create();
 String cold_input,fever_input,headache_input,bodypain_input,stomachupset_input;
 String cold_val="",fever_val="",headache_val="",bodypain_val="",stomachupset_val="";
 System.out.println("Enter the relevant information of the symptoms to get the correct prescription \n Type yes if you have the symptom or no if not");
 Scanner in = new Scanner(System.in);
 ////////////////////////////////////////
 System.out.println("Do you have cold");
 cold_input=in.nextLine();
 if(cold_input.equals("yes")){
 cold_val="cold";
 }
 else{
 cold_val="";
 }
 ////////////////////////////////
 System.out.println("Do you have fever");
 fever_input=in.nextLine();
 if(fever_input.equals("yes")){
 fever_val="fever";
 }
 else{
 fever_val="";
 }
 ////////////////////////////////
 System.out.println("Do you have a headache");
 headache_input=in.nextLine();
 if(headache_input.equals("yes")){
 headache_val="headache";
 }
 else{
 headache_val="";
 }
 //////////////////////////////////////////
 System.out.println("Do you have bodypain");
 bodypain_input=in.nextLine();
 if(bodypain_input.equals("yes")){
 bodypain_val="bodypain";
 }
 else{
 bodypain_val="";
 }
 ///////////////////////////////////////////
 System.out.println("Do you have stomach upset");
 stomachupset_input=in.nextLine();
 if(stomachupset_input.equals("yes")){
 stomachupset_val="stomachupset";
 }
 else{
 stomachupset_val="";
 } 
 String php_url= "http://localhost:8080/networklab4/main_connection.php?cold="+cold_val+"&fever="+fever_val+"&headache="+headache_val+"&bodypain="+bodypain_val+"&stomachupset="+stomachupset_val;
 //System.out.println(php_url);
 
 WebResource webResource = client.resource(php_url);
 ClientResponse response = webResource.accept("").get(ClientResponse.class);
 if (response.getStatus() != 200) {
 throw new RuntimeException("Failed : HTTP error code : " + response.getStatus());
 }
 
 String output2 = response.getEntity(String.class);
 System.out.println("\n============Prescribed Medicines============");
 System.out.println(output2);
 System.out.println(php_url);
 
 }
    
    
 }//end of method



