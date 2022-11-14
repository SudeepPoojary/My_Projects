

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;

//import java.awt.event;

class Brain implements ActionListener {
	JFrame mainFrame = new JFrame();
	JLabel title = new JLabel();
	JPanel title_panel = new JPanel();
	JPanel buttonpanel = new JPanel();
	JButton playButton = new JButton("PLAY GAME");
	JButton creditButton = new JButton("CREDIT");
	JButton helpButton = new JButton("HELP");
	JButton exitButton = new JButton("EXIT");
	Brain(){
		
		mainFrame.setTitle("Tic-Tac-Toe");
		mainFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		mainFrame.setSize(500,500);
		mainFrame.getContentPane().setBackground(new Color(50,50,50));
		mainFrame.setLayout(new BorderLayout());
		mainFrame.setVisible(true);
		
		
		title_panel.setLayout(new BorderLayout());
		title_panel.setBounds(0,0,500,100); 
		
		
		
		title.setBackground(new Color(50,50,50));
		title.setForeground(new Color(255,255,255));
		title.setFont(new Font("Arial",Font.BOLD,60));
		title.setHorizontalAlignment(JLabel.CENTER);               //Sets the alignment of the label's contents along the X axis
		title.setText("Tic-Tac-Toe");
		title.setOpaque(true);
		
		playButton.setFont(new Font("Arial", Font.BOLD,30));
		playButton.addActionListener(this);
		playButton.setFocusable(false);
		
		creditButton.setFont(new Font("Arial", Font.BOLD,28));
		creditButton.addActionListener(this);
		creditButton.setFocusable(false);
		
		helpButton.setFont(new Font("Arial", Font.BOLD,28));
		helpButton.addActionListener(this);
		helpButton.setFocusable(false);
		
		exitButton.setFont(new Font("Arial", Font.BOLD,28));
		exitButton.addActionListener(this);
		exitButton.setFocusable(false);
		
		buttonpanel.setLayout(new GridLayout(4,1,0,15)); 
		
		title_panel.add(title);
		mainFrame.add(title_panel,BorderLayout.NORTH);
		mainFrame.add(buttonpanel);
		buttonpanel.add(playButton);
		buttonpanel.add(helpButton);
		buttonpanel.add(creditButton);
		buttonpanel.add(exitButton);
		buttonpanel.setBackground(new Color(50,50,50));
	}

	@Override
	public void actionPerformed(ActionEvent a) {
		if(a.getSource()==playButton) {
			new Logic();
		}
		else if(a.getSource()==creditButton) {
			new Cred();
		}
		else if(a.getSource()==helpButton) {
			new Help();
		}
		else if(a.getSource()==exitButton) {
			System.exit(0);
		}
	}
	
}