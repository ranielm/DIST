package pratica09;

public class ComandoAparelhoSom implements Comando{
    AparelhoSom aparelhoSom;
    
    
    public ComandoAparelhoSom(AparelhoSom as){
        this.aparelhoSom = as;
    }
    
    public void executar(){
        aparelhoSom.ligar();
    }
    
    public void undo(){
        aparelhoSom.desligar();
    }
}