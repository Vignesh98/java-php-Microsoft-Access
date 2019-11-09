package javaClientforPHPService;
 
import com.sun.jersey.api.client.Client;
import com.sun.jersey.api.client.ClientResponse;
import com.sun.jersey.api.client.WebResource;

public class javaClientForPHPService {
 
 public static void main(String [] args)
 {
 new javaClientForPHPService().getPlainTextResponse();
 }

 private void getPlainTextResponse() {
 try {
 
 Client client = Client.create();
 WebResource webResource = client.resource("http://localhost:8080/networklab4/restfulPHP.php?wonderName=");
 ClientResponse response = webResource.accept("").get(ClientResponse.class);
 if (response.getStatus() != 200) {
 throw new RuntimeException("Failed : HTTP error code : " + response.getStatus());
 }
 
 String output2 = response.getEntity(String.class);
 System.out.println("\n============Plain Text Response============");
 System.out.println(output2);
 
 } catch (Exception e) {
 e.printStackTrace();
 }
 }//end of method
}