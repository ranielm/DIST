package controle.remoto;

public class ComandoForno implements Comando{
    Forno forno;
    
    public ComandoForno(Forno f){
        this.forno = f;
    }
    
    public void executar(){
        forno.ligar();
    }
    
    public void undo(){
        forno.desligar();
    }
}
