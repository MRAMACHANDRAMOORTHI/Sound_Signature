import java.io.*;
class Filedemo
{
	public static void main(String arg[])
	{
		File f1=new File("e:/hai.txt");
		File f2=new File("e:/","Hello");
		File f3=new File("e:/","Bye");
		
		System.out.println("\n\nLength is: "+f1.length());
		System.out.println("\nName is: "+f1.getName());
		
		System.out.println("\nParent is: "+f1.getPath());
		System.out.println("\nExists: "+f1.exists());
		
		System.out.println("\nDirectory: "+f1.isDirectory());
		System.out.println("\nFile: "+f1.isFile());
		
		System.out.println("\nRead: "+f1.canRead());
		System.out.println("\nWrite: "+f1.canWrite());
		
		System.out.println("\nHidden: "+f1.isHidden());
		System.out.println("\nMake Directory: "+f2.mkdir());
		
		System.out.println("\nRename: "+f2.renameTo(f3));
		System.out.println("\nDelete: "+f3.delete());
	}
}