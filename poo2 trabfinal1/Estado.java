public abstract class Estado
{
    public Usuario usuario;
    public int limiteInferior_amizade;
    public int limiteSuperior_amizade;
    public int limiteInferior_curtidas;
    public int limiteSuperior_curtidas;
    public String nome;
    public int limite_post;
    public void addAmigo(Usuario usuario){ 
        this.usuario.amigos.add(usuario);
        usuario.amigos.add(this.usuario);
        this.verificarEstado();
    }
    public void removeAmigo(Usuario usuario){
        this.usuario.removeAmigo(usuario);
        usuario.amigos.remove(this.usuario);
        this.verificarEstado();
    }
    public void addCurtida(){
        this.usuario.curtidas = this.usuario.curtidas +1;
        this.verificarEstado();
    }
    protected abstract void setLimites();
    protected abstract void verificarEstado();
    public Estado(Usuario u){
        this.usuario = u;
        setLimites();
    }
}
