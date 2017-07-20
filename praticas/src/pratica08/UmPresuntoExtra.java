package pratica08;

/**
 *
 * @author raniel
 */
public class UmPresuntoExtra extends Extra
{
    public UmPresuntoExtra(String descricao, double preco, Pedido pedido)
    {
        super(descricao, preco, pedido);
    }
    
    @Override
    public double getPreco()
    {
        return this.preco+pedido.getPreco();
    }
}