# googlewithphp
sendmailusing your google account
this file can be used to send mail using smtp server
user need to follow following steps
1) give following details inside gmail.php file
$email ="";                    
$password ="";
$email="";
$message ="";
$subject ="";

and and fill this also in place of ??????
header("location:../??????") --->  
place link where you want to redirect your page after sending the mail
firt time it might not able to send mail and may give popup saying smtp error
and on your mail you get a mail asking for permission so give the permission then you can use it





myclient.java

MyClient.java

import java.net.*;

import java.io.*;

class MyClient

{

public static void main(String args[])throws Exception

{

Socket s=new Socket("localhost",3333); //Give the IP address instead of localhost

DataInputStream din=new DataInputStream(s.getInputStream());

DataOutputStream dout=new DataOutputStream(s.getOutputStream());

BufferedReader br=new BufferedReader(new InputStreamReader(System.in));

String str="",str2="";

while(!str.equals("stop"))

{

str=br.readLine();

dout.writeUTF(str);

dout.flush();

str2=din.readUTF();

System.out.println("Server says: "+str2);

}

dout.close();

s.close();

}

}




MyServer.java

import java.net.*;

import java.io.*;

class MyServer

{

public static void main(String args[])throws Exception

{

ServerSocket ss=new ServerSocket(3333);

Socket s=ss.accept();

DataInputStream din=new DataInputStream(s.getInputStream());

DataOutputStream dout=new DataOutputStream(s.getOutputStream());

BufferedReader br=new BufferedReader(new InputStreamReader(System.in));

String str="",str2="";

while(!str.equals("stop"))

{

str=din.readUTF();

System.out.println("client says: "+str);

str2=br.readLine();

dout.writeUTF(str2);

dout.flush();

}

din.close();

s.close();

ss.close();

}

}

