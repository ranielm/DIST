/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pratica07;

/**
 *
 * @author raniel
 */
public class Distribuir10 implements FabricaDeCadeias {

	private FabricaDeCadeias chain;
	
	@Override
	public void setNextChain(FabricaDeCadeias nextChain) {
		this.chain=nextChain;
	}

	@Override
	public void dispense(MoedaCorrente cur) {                      
		if(cur.getAmount() >= 10){
			int num = cur.getAmount()/10;
			int remainder = cur.getAmount() % 10;
			System.out.println("Dispensing "+num+" 10$ note");
			if(remainder !=0) this.chain.dispense(new MoedaCorrente(remainder));
		}else{                       
			this.chain.dispense(cur);
		}
	}
}