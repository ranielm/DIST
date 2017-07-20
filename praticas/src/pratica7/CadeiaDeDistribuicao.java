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
public interface CadeiaDeDistribuicao {
    void setNextChain(CadeiaDeDistribuicao nextChain);
	
    void dispense(MoedaCorrente cur);
}