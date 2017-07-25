package pratica09;

public class ComandoArCondicionado implements Comando{
    ArCondicionado arCondicionado;
    
    public ComandoArCondicionado(ArCondicionado ac){
        this.arCondicionado = ac;
    }
    
    public void executar(){
        arCondicionado.ligar();
    }
    
    public void undo(){
        arCondicionado.desligar();
    }
}