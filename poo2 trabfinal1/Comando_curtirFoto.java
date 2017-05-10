public class Comando_curtirFoto implements Comando
{
    Foto foto;
    public Comando_curtirFoto(Foto foto){
        this.foto = foto;
    }
    public void executar(){
        this.foto.curtir();
    }
}
