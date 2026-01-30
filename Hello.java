

import org.python.antlr.ast.If;
import org.python.antlr.ast.Str;
import org.python.bouncycastle.asn1.x509.qualified.MonetaryValue;
import org.python.core.*;
import org.python.modules.thread.thread;
import org.python.util.PythonInterpreter;



import java.sql.*;
import javax.print.DocFlavor.STRING;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import java.io.*;
import java.lang.reflect.Field;
import javax.imageio.ImageIO;
import org.postgresql.*;
import org.postgresql.core.v3.*;
import org.postgresql.jdbc3.*;
import java.util.List;
import java.util.ArrayList;
import java.awt.image.BufferedImage;


	



 public class Hello extends JFrame implements KeyListener {

     public Connection con = null;
   public PreparedStatement preparedStatement = null;
   public String STRNUMAMOUNT;
   public char[] STRNUMAMOUNTARRAY;
    public int NUMAMOUNT;
    public String FIRSTAMOUNT;
    public int NUM2AMOUNT;
    public ResultSet RS;
    public ResultSet WS;
    public Connection connection = null;
    public Statement  sqlAMOUNTREAD  = null;
    public ImageIcon backgroundImage; 
    public JTextField Field = new JTextField(20); // for easier manipulation
    public JTextField PASSFIELD = new JTextField(20);
    public JLabel backgroundLabel;
    public boolean Acc = false;
    public String USRID;
    public String PASSID;
    public String  USER1CPY;
    public final String  PASS1CPY;  
     public String  USER2CPY;
    public String  PASS2CPY;  
     public String terminalline;
    class _global_  
{
    int SCREEN_WIDTH;
	int SCREEN_HEIGHT;
    int FIELD_WIDTH;
    int FIELD_HEIGHT; 
    String Help; 
    String USR;
    String PASS;
    Font style;
    String CR8USER;
    String ALTLOGTEXT;
    
	
   
    public _global_(final int SCREEN_WIDTH, final int SCREEN_HEIGHT, String help, Font font, String USR, String PASS, final int FIELD_WIDTH, final int FIELD_HEIGHT, String CR8USER, String ALTLOGTEXT)
	{
		 this.SCREEN_WIDTH = SCREEN_WIDTH;
		this.SCREEN_HEIGHT = SCREEN_HEIGHT;
        this.Help = help;
        this.style = font;
        this.USR = USR;
        this.PASS = PASS;
        this.FIELD_WIDTH = FIELD_WIDTH;
        this.FIELD_HEIGHT = FIELD_HEIGHT;
        this.CR8USER = CR8USER;
        this.ALTLOGTEXT = ALTLOGTEXT;
	}
   

}
  public void keyTyped(KeyEvent e) {
        }
   public void keyPressed(KeyEvent s) {
    String filepath = "Myimg5.png";
    String format;
            //DEBUG: System.out.println("Key Pressed: " + KeyEvent.getKeyText(s.getKeyCode()));
            int keycode = s.getKeyCode();
           
           



            if (keycode == KeyEvent.VK_S || keycode == KeyEvent.VK_F11) {
          
            BufferedImage image = new BufferedImage(getWidth(), getHeight(), BufferedImage.TYPE_INT_ARGB);
            Graphics2D writebuffer = image.createGraphics();
            paint(writebuffer);
            writebuffer.dispose();
            format = filepath.substring(filepath.lastIndexOf('.') + 1);
            try
            {
                 ImageIO.write(image, format, new File(filepath));
            System.out.println("Image saved successfully to: " + filepath);
                 
            }catch(IOException exception)
            {
                exception.getMessage();
            }
                
            }
       
       
        }
       // public void SaveImg(String filepath)
      public void keyReleased(KeyEvent e) {
        }
 class _BASH_
    {
        String bashscrpt;
        public _BASH_(String terminalline)
        {
         this.bashscrpt = terminalline;   
        }

    }
    class DRAW extends JPanel
    {
            @Override
            protected void paintComponent(Graphics g){
            super.paintComponent(g);
            }


    }
    
     _BASH_ entryBash_= new _BASH_("php -S localhost:8000"); 
     
    _global_ global = new _global_(800, 600, "Help", new Font("UbuntuSans-Italic", Font.PLAIN, 20 ), "USERNAME:", "PASSWORD:", 275, 
    25, "CREATE AN ACCOUNT", "ALT_LOGIN");
    public Hello()
	{
    try{
        
      backgroundImage = new ImageIcon(ImageIO.read(new File("/home/linuxtor/Desktop/IMG_7954.PNG"))); 
           // JLabel backgroundLabel = new JLabel(backgroundImage);
           backgroundLabel =new JLabel(backgroundImage);
             setContentPane(backgroundLabel);
    } catch(IOException e)
    {
        e.printStackTrace();
    }
	setTitle("Data Entry");
    setSize(global.SCREEN_WIDTH, global.SCREEN_HEIGHT);
	setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    //setLocationRelativeTo(null);
    setLayout(null);
  
    setFocusable(true);
    addKeyListener(this);
   JButton helpButton = new JButton();
    helpButton.addActionListener(new ActionListener() {
        //@Override
        public void actionPerformed(ActionEvent event)
        {
           
            try{
               

          ProcessBuilder processBuilder = new ProcessBuilder("bash", "phploader.sh");

          processBuilder.redirectErrorStream(true);

          Process process = processBuilder.start();
        } catch(Exception e)
        {
             e.printStackTrace();
        }
        
      
        }
    });

 String url = "jdbc:postgresql://localhost:5432/postgres";

 String user = "postgres";

 String Ppass = "pass";


  
    
    Statement sql = null;
    PreparedStatement statement = null;
      ResultSet resultset = null;
      
    String USER1 = null;
     String PASS1 = null;
      String USER2 = null;
     String PASS2 = null;
    try{

          List<Integer> idsToMatch = new ArrayList<>();
            idsToMatch.add(1);
            idsToMatch.add(2);
            
   connection = DriverManager.getConnection(url,user, Ppass);
   if (connection == null) {
    System.out.println("right");
   }
        
     sql = connection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_READ_ONLY);
        
     
        final int DataValue = 2;
          
           //statement.setInt(1, 1 );   
           
           
              resultset = sql.executeQuery( "SELECT * FROM USERS");
           
            

              if(resultset.first()){
                  
              USER1 = resultset.getString("user_name");
              PASS1 = resultset.getString("pass_word");  
              System.out.println(USER1);
                 System.out.println(PASS1);

              }
              if(resultset.next()){
                  
              USER2 = resultset.getString("user_name");
              PASS2 = resultset.getString("pass_word"); 
               System.out.println("User2: " +USER2);
                 System.out.println("Pass2:"+ PASS2); 
           
              }
        }

        
             
catch(SQLException e)
{
    e.getStackTrace();
    e.printStackTrace();
}    
    
    
    USER1CPY = USER1;
    PASS1CPY =PASS1;
    USER2CPY = USER2;
    PASS2CPY =PASS2;
    JButton ALT_PAGE = new JButton();
    JButton Cr8Button = new JButton();
    JLabel test = new JLabel(global.Help);     
    JLabel USER_indent = new JLabel(global.USR); 
    JLabel USER_pass = new JLabel(global.PASS);
    JLabel CR8USERTEXTURE = new JLabel(global.CR8USER);
    JLabel ALTLOG = new JLabel(global.ALTLOGTEXT);
    ALTLOG.setBounds(420, 150, 100, 100);
    ALTLOG.setForeground(Color.WHITE);
    add(ALTLOG);
    
    Field.setBounds(200, 230, global.FIELD_WIDTH, global.FIELD_HEIGHT);
    CR8USERTEXTURE.setBounds(25, -45, 250, 150);
    CR8USERTEXTURE.setForeground(Color.WHITE);
    PASSFIELD.setBounds(200, 400, global.FIELD_WIDTH, global.FIELD_HEIGHT);
    ALT_PAGE.setBounds(420, 165, 75, 50);
    ALT_PAGE.setOpaque(false);
    ALT_PAGE.setContentAreaFilled(false);
    ALT_PAGE.setBorderPainted(false);
    add(ALT_PAGE);
    helpButton.setBounds(685, 5, 75, 50);
    helpButton.setOpaque(false);
    helpButton.setContentAreaFilled(false);
    helpButton.setBorderPainted(false);
    Cr8Button.setBounds(20, 10, 150, 50);
    Cr8Button.setOpaque(false);
    Cr8Button.setContentAreaFilled(false);
    Cr8Button.setBorderPainted(false);
    add(helpButton);
    test.setBounds(700, -100, 250, 250);
    USER_indent.setBounds(200, 75, 250, 250);
    USER_pass.setBounds(200, 200, 250, 250);
    USER_pass.setFont(global.style);
    USER_pass.setForeground(Color.WHITE);
    USER_indent.setFont(global.style);
    USER_indent.setForeground(Color.WHITE);
    test.setFont(global.style);  
    test.setForeground(Color.WHITE);  
    add(Cr8Button);
     add(PASSFIELD);
    add(CR8USERTEXTURE);
    add(Field);
     add(test);
    add(USER_indent);
    add(USER_pass);
   
  
  
      /*  Field.addActionListener(new ActionListener() {
      public void actionPerformed(ActionEvent event)
        {
            //System.out.println(USER1CPY);
           
         
            if (USRID.equals(USER1CPY)) {
                   System.out.println(USRID);

            }
     
        }
        
  });
  */

  ALT_PAGE.addActionListener(new ActionListener() {
    public void actionPerformed(ActionEvent e)
    {
        //setFocusable();
        System.out.println("yes");

        

    }
  });
  PASSFIELD.addActionListener(new ActionListener() {
    public void actionPerformed(ActionEvent event)
    {
         requestFocusInWindow();
         USRID = Field.getText();
            PASSID =PASSFIELD.getText();

            
            if (PASSID.equals(PASS1CPY) && (USRID.equals(USER1CPY))) {
                System.out.println("Finally");
                 
               // backgroundImage = null;
                remove(ALTLOG);
                remove(PASSFIELD);
                remove(USER_indent);
                remove(USER_pass);
                remove(test);
                remove(ALT_PAGE);
                remove(helpButton);
                remove(Field);
                remove(Cr8Button);
                remove(CR8USERTEXTURE);
                setLayout(new FlowLayout());
                getContentPane().setBackground(Color.WHITE);
                try{
                sqlAMOUNTREAD = connection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_READ_ONLY);
                            
                
                    RS = sqlAMOUNTREAD.executeQuery("SELECT * FROM AMOUNTS");
                    RS.first();
                    if (RS.first()) {
                    FIRSTAMOUNT=RS.getString("amount_due"); 
                    System.out.println(FIRSTAMOUNT);                       
                    NUMAMOUNT = RS.getInt("credit_num");
                    STRNUMAMOUNT = Integer.toString(NUMAMOUNT);
                  
                    
                
                }
            
            
            
                } catch(SQLException e)
                {
                    e.getStackTrace();
                    e.printStackTrace();
                }
                
                JLabel WEL = new JLabel("Welcome");
                JLabel AMUNTDUE = new JLabel("Amount Due:" + FIRSTAMOUNT);
                JPasswordField MONEY = new JPasswordField(20);
                MONEY.setBounds(275, 300, global.FIELD_WIDTH, global.FIELD_HEIGHT);
                MONEY.setEchoChar('$');
                AMUNTDUE.setBounds(350, 10, 500, 500);
                WEL.setBounds(650, -100, 300, 300);
                WEL.setForeground(Color.WHITE);
                AMUNTDUE.setForeground(Color.WHITE);
                
                   
                add(MONEY);
                add(AMUNTDUE);
                add(WEL);
                JLabel USER_NAME = new JLabel(USER1CPY + "!");
                USER_NAME.setBounds(720, -100, 300, 300);
                USER_NAME.setForeground(Color.WHITE);
                add(USER_NAME);
                 JLabel crediDENT = new JLabel("ENTER CREDENTIALS");
                 crediDENT.setBounds(340, 350, global.FIELD_WIDTH, global.FIELD_HEIGHT);
                 crediDENT.setForeground(Color.WHITE);
                 add(crediDENT);
                MONEY.addActionListener(new ActionListener() {
                    
                public void actionPerformed(ActionEvent eActionEvent)
                {
                   
                    requestFocusInWindow();
                     STRNUMAMOUNTARRAY = MONEY.getPassword();
                    String AMOUNTGIVEN = new String(STRNUMAMOUNTARRAY);

                    if (AMOUNTGIVEN.equals(STRNUMAMOUNT)) {
                        System.out.println("THIS IS IT!");
                        String Update = "UPDATE AMOUNTS SET amount_due = ? WHERE id = 11";
                        try
                        {

                        con = DriverManager.getConnection(url, user, Ppass);     
                        preparedStatement = con.prepareStatement(Update);
                        preparedStatement.setDouble(1, 0.0);
                        preparedStatement.executeUpdate();
                        } catch(SQLException E)
                        {
                            E.getStackTrace();
                            E.printStackTrace();
                        }
                    }
                
                
                }  
                
                
                });          
                 



            
                    // Old way(less efficent for the purpose of the app)
                /*  List <String> ArrayList = new ArrayList<>();
                 ArrayList.add("sh");
                ArrayList.add("-c");
                ArrayList.add(entryBash_.bashscrpt);

                try
                {
                ProcessBuilder pBuilder = new ProcessBuilder(ArrayList);
                pBuilder.redirectErrorStream(true);
                Process start = pBuilder.start();
                } catch(Exception exception)
                {
                    exception.getMessage();
                }
                
                
                    try
                    {
                        ProcessBuilder HomepageLoader = new ProcessBuilder("bash", "phpHP.sh");
                    HomepageLoader.redirectErrorStream(true);
                    Process starthp = HomepageLoader.start();
                    } catch(Exception e)
                    {
                        e.printStackTrace();
                    }
                */
                
            }
            if (PASSID.equals(PASS2CPY) && (USRID.equals(USER2CPY))) {
                  System.out.println("Finally");

             // backgroundImage = null;
                remove(ALTLOG);
                remove(PASSFIELD);
                remove(USER_indent);
                remove(USER_pass);
                remove(test);
                remove(ALT_PAGE);
                remove(helpButton);
                remove(Field);
                remove(Cr8Button);
                remove(CR8USERTEXTURE);
                setLayout(new FlowLayout());
                getContentPane().setBackground(Color.WHITE);
                try{
                sqlAMOUNTREAD = connection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_READ_ONLY);
                            
                
                    RS = sqlAMOUNTREAD.executeQuery("SELECT * FROM AMOUNTS");
                    RS.next();
                    if (RS.next()) {
                    FIRSTAMOUNT=RS.getString("amount_due");                        
                    NUMAMOUNT = RS.getInt("credit_num");
                    STRNUMAMOUNT = Integer.toString(NUMAMOUNT);
                  
                    
                
                }
            
            
            
                } catch(SQLException e)
                {
                    e.getStackTrace();
                    e.printStackTrace();
                }
                
                JLabel WEL = new JLabel("Welcome");
                JLabel AMUNTDUE = new JLabel("Amount Due:" + FIRSTAMOUNT);
                JPasswordField MONEY = new JPasswordField(20);
                MONEY.setBounds(275, 300, global.FIELD_WIDTH, global.FIELD_HEIGHT);
                MONEY.setEchoChar('$');
                AMUNTDUE.setBounds(350, 10, 500, 500);
                WEL.setBounds(650, -100, 300, 300);
                WEL.setForeground(Color.WHITE);
                AMUNTDUE.setForeground(Color.WHITE);
                
                   
                add(MONEY);
                add(AMUNTDUE);
                add(WEL);
                JLabel USER_NAME = new JLabel(USER2CPY + "!");
                USER_NAME.setBounds(720, -100, 300, 300);
                USER_NAME.setForeground(Color.WHITE);
                add(USER_NAME);
                 JLabel crediDENT = new JLabel("ENTER CREDENTIALS");
                 crediDENT.setBounds(340, 350, global.FIELD_WIDTH, global.FIELD_HEIGHT);
                 crediDENT.setForeground(Color.WHITE);
                 add(crediDENT);
                MONEY.addActionListener(new ActionListener() {
                    
                public void actionPerformed(ActionEvent eActionEvent)
                {
                   
                    requestFocusInWindow();
                     STRNUMAMOUNTARRAY = MONEY.getPassword();
                    String AMOUNTGIVEN = new String(STRNUMAMOUNTARRAY);

                    if (AMOUNTGIVEN.equals(STRNUMAMOUNT)) {
                        System.out.println("THIS IS IT!");
                        String Update = "UPDATE AMOUNTS SET amount_due = ? WHERE id = 12";
                        try
                        {

                        con = DriverManager.getConnection(url, user, Ppass);     
                        preparedStatement = con.prepareStatement(Update);
                        preparedStatement.setDouble(1, 0.0);
                        preparedStatement.executeUpdate();
                        } catch(SQLException E)
                        {
                            E.getStackTrace();
                            E.printStackTrace();
                        }
                    }
                
                
                }  
                
                
                });          

                }
                
             //if (!PASSID.equals(PASS1CPY) && (!USRID.equals(USER1CPY)) || !PASSID.equals(PASS2CPY) && (!USRID.equals(USER2CPY)) ) {
               // System.out.println("Wrong");
            //}

    }
  });

  
 Cr8Button.addActionListener(new ActionListener() {
    public void actionPerformed(ActionEvent e)
    {
               try{
          ProcessBuilder processBuilder = new ProcessBuilder("bash", "phpLoaderAcct.sh");

          processBuilder.redirectErrorStream(true);

          Process process = processBuilder.start();
        } catch(Exception error)
        {
             error.printStackTrace();
        }

      
        }

    
 });

    
}

    public static void main(String[] args) 
{
 Hello app; 
 app = new Hello();
 app.setVisible(true);  

 


}

}

