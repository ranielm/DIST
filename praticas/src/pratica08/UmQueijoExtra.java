package pratica08;

/**
 *
 * @author raniel
 */
public class UmQueijoExtra extends Extra
{
    public UmQueijoExtra(String descricao, double preco, Pedido pedido)
    {
        super(descricao, preco, pedido);
    }
    
    @Override
    public double getPreco()
    {
        return this.preco+pedido.getPreco();
    }
}