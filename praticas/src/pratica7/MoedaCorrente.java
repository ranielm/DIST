package pratica7;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author raniel
 */
public class MoedaCorrente {
    private int amount;
    
    int vetor[] = new int[7];
    
	public MoedaCorrente(int amt){
		this.amount=amt;
	}
	
	public int getAmount(){
		vetor[0] = this.amount;
		return this.amount;
	}    
}