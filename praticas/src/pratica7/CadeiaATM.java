/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pratica7;

/**
 *
 * @author raniel
 */
import java.util.Scanner;

public class CadeiaATM {

	private FabricaDeCadeias c1;

	public CadeiaATM() {
		// inicializa a cadeia
		this.c1 = new Distribuir100();
		FabricaDeCadeias c2 = new Distribuir50();
		FabricaDeCadeias c3 = new Distribuir20();
        FabricaDeCadeias c4 = new Distribuir10();
        FabricaDeCadeias c5 = new Distribuir05();
		FabricaDeCadeias c6 = new Distribuir02();
        FabricaDeCadeias c7 = new Distribuir01();
                
        // seta a cadeia de responsabilidades
        
		c1.setNextChain(c2);
		c2.setNextChain(c3);
        c3.setNextChain(c4);
        c4.setNextChain(c5);
        c5.setNextChain(c6);
        c6.setNextChain(c7);
	}

	public static void main(String[] args) {
		CadeiaATM atmDispenser = new CadeiaATM();
		while (true) {
			int amount = 0;
			System.out.println("Enter amount to dispense");
			Scanner input = new Scanner(System.in);
			amount = input.nextInt();
			/*if (amount % 10 != 0) {
				System.out.println("Amount should be in multiple of 10s.");
				return;
			}*/
			// process the request
			atmDispenser.c1.dispense(new MoedaCorrente(amount));
		}

	}
}