public class Comando_curtirStatus implements Comando
{
    Status status;
    public Comando_curtirStatus(Status status){
        this.status = status;
    }
    public void executar(){
        this.status.curtir();
    }
}
