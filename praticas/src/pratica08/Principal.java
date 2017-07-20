package pratica08;

/**
 *
 * @author raniel
 */
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