class Employee
{
	static int no=1;
	void display(int eid,String ename,float salary)
	{
	try
	{
	System.out.println("Thread"+no+"entered");
	System.out.println("Employee Id:" + eid);
	System.out.println("Employee Name:"+ename);
	Thread.sleep(2000);
	System.out.println("employee name. salary:"+ salary);
	float bonus=(salary*20)/100;
	System.out.println("Bonus Amount :" + bonus);
	System.out.println("Thread" + no+"exited");
	no++;
	}
	catch(Exception ex)
	{
	System.out.println(ex);
	}
	}
}
class ThreadExample extends Thread
	{
		Employee e;
		int id;
		String name;
		float salary;
		ThreadExample(Employee e, int id, String name, float salary)
		{
		this.e = e;	
		this.id = id;
		this.name = name;
		this.salary = salary;
		}
	public void run()
	{
	synchronized(e)
	{
	e.display(id,name,salary);
	}
	}
class Sample
{
public static void main(String s[])
	{
	Employee e = new Employee();
	Thread t1= new ThreadExample(e,101,"Ram",12000.00f);
	Thread t2= newThreadExample(e,102,"SriRam",13000.00f);
	t1.start();
	t2.start();
	}
}
}