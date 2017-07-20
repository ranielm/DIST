package pratica08;

/**
 *
 * @author raniel
 */
public abstract class Extra implements Pedido
{
    protected Pedido pedido;
    protected String descricao;
    protected double preco;
    
    public Extra(String descricao, double preco, Pedido pedido) 
    {
        this.descricao = descricao;
        this.preco = preco;
        this.pedido = pedido;
    }
    
    // O preço é delegado para a implementação concreta
    @Override
    public abstract double getPreco();

    // Label default é fornecido
    @Override
    public String getDescricao() 
    {
        return pedido.getDescricao() + ", " + this.descricao;
    }
}   