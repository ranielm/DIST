public class Foto extends Postagem 
{

    public Foto(String legenda, Usuario usuario)
    {
        this.texto = legenda;
        this.usuario = usuario;
        this.usuario.lista_fotos.add(this);
    }
}
