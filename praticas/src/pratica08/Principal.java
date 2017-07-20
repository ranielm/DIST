/* @author Raniel Mendonça - 11321BCC024 e Amanda Souza - 11421BCC036 */

package pratica08;

public class Principal {
	
    public static void main(String[] args) 
    {
        FabricaDeLanchonetes fabrica = new FabricaGiraffas();
        Lanchonete giraffas = fabrica.criarLanchonete();
        giraffas.fazerPedido();
        System.out.println();
        
        fabrica = new FabricaBurguerKing();
        Lanchonete burguerKing = fabrica.criarLanchonete();
        burguerKing.fazerPedido();
        System.out.println();
    }
    
}