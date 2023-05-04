import java.util.Scanner;

public class fibonacci {
    public static void main(String args[]) {

        int x = 0;
        int y = 1;
        
        for(int i=0, z;i<=10;i++){
            System.out.println(x);
            System.out.println(y);
            z=x+y;
            System.out.println(z);
            x=z+y;
            y=x+z;
            
        }
    }
}