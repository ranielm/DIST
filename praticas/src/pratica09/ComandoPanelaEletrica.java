package pratica09;

public class ComandoPanelaEletrica implements Comando{
    PanelaEletrica panelaEletrica;
    
    public ComandoPanelaEletrica(PanelaEletrica p){
        this.panelaEletrica = p;
    }
    
    public void executar(){
        panelaEletrica.ligar();
    }
    
    public void undo(){
        panelaEletrica.desligar();
    }
}