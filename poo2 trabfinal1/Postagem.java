public abstract class Postagem
{
    Usuario usuario;
    int curtidas = 0;
    String texto;
    public void curtir(){
        this.curtidas = this.curtidas+1;
        this.usuario.estado.addCurtida();
    }
}
