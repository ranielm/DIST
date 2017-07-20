/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pratica7;

public class Distribuir05 implements CadeiaDeDistribuicao {

	private CadeiaDeDistribuicao chain;
	
	@Override
	public void setNextChain(CadeiaDeDistribuicao nextChain) {
		this.chain=nextChain;
	}

	@Override
	public void dispense(MoedaCorrente cur) {
		if(cur.getAmount() >= 5){
			int num = cur.getAmount()/5;
			int remainder = cur.getAmount() % 5;
			System.out.println("Dispensing "+num+" 5$ note");
			if(remainder !=0) this.chain.dispense(new MoedaCorrente(remainder));
		}else{
			this.chain.dispense(cur);
		}
	}
}