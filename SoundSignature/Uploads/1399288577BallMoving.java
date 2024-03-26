import java.applet.*;
import java.awt.*;
import java.awt.event.*;

public class BallMoving extends Applet implements ActionListener,Runnable
{
	int x,y,m,n;
	Button b1,b2;
	Panel p1;
	boolean b=false;
	Thread t;
	public void init()
	{
	x=30; y=20;
	m=3;
	n=10;
	setLayout(new BorderLayout());
	b1=new Button("Suspend");
	b2=new Button("Resume");
	b1.addActionListener(this);
	b2.addActionListener(this);
	p1=new Panel();
	p1.setBackground(Color.green);
	p1.add(b1);
	p1.add(b2);
	add("South",p1);
	t=new Thread(this);
	t.start();
	}
	public synchronized void run()
	{
	try
	{	
	while(true)
	{
	x=x+m;
	y=y+m;
	if(y>=400||y<=25)
	n=n*(-1);
	if(x>=700||x<=25)
	m=m*(-1);
	repaint();
	Thread.sleep(100);
	while(b)
	wait();
	}
	}
	catch(Exception ex)
	{
	System.out.println(ex);
	}
	}
	public void actionPerformed(ActionEvent e)
	{
	if(e.getSource()==b1)
	{
	b=true;
	}
	else if(e.getSource()==b2)
	{
	b=false;
	try
	{
	synchronized(this)
	{
	notify();
	}
	}
	catch(Exception ex)
	{
	System.out.println(ex);
	}
	}
           }
	public void paint(Graphics g)
	{
	g.setColor(Color.orange);
	g.drawRect(20,20,730,430);
	g.setColor(Color.blue);
	g.fillOval(x,y,50,50);
	}
}
/*<applet code = "BallMoving" width= 800 height = 500>
</applet>*/
	