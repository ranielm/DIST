package pratica08;

/**
 *
 * @author raniel
 */
public class Principal 
{
    public static void main(String[] args) 
    {
        Pedido sanduicheDaCasa = new Sanduiche("Sanduiche da Casa", 16);
        sanduicheDaCasa = new UmBaconExtra("adicional de bacon", 2, sanduicheDaCasa);
        sanduicheDaCasa = new UmQueijoExtra("adicional de queijo", 2, sanduicheDaCasa);
        System.out.println(sanduicheDaCasa.getDescricao() + ". \nTotal: " + sanduicheDaCasa.getPreco() + "\n");
        
        Pedido sanduicheDaCasa2 = new Sanduiche("Sanduiche da Casa", 16);
        sanduicheDaCasa2 = new UmBaconExtra("adicional de bacon", 2, sanduicheDaCasa2);
        sanduicheDaCasa2 = new UmBaconExtra("adicional de bacon", 2, sanduicheDaCasa2);
        sanduicheDaCasa2 = new UmQueijoExtra("adicional de queijo", 2, sanduicheDaCasa2);
        sanduicheDaCasa2 = new UmQueijoExtra("adicional de queijo", 2, sanduicheDaCasa2);
        System.out.println(sanduicheDaCasa2.getDescricao() + ". \nTotal: " + sanduicheDaCasa2.getPreco() + "\n");
        
        Pedido bauru = new Sanduiche("Bauru", 5);
        bauru = new UmPresuntoExtra("adicional de presunto", 1, bauru);
        System.out.println(bauru.getDescricao() + ". \nTotal: " + bauru.getPreco() + "\n");
    }    
}