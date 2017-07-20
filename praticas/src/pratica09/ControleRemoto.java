package controle.remoto;

public class ControleRemoto {
    Comando[] comandoON = new Comando[4];
    Comando[] comandoOFF = new Comando[4];
    
    public ControleRemoto(){
    }
    
    public void pressionaBotaoON(int slot){
        comandoON[slot].executar();
    }
    
    public void pressionaBotaoOFF(int slot){
        comandoOFF[slot].executar();
    }
    
    public void setComando(int slot, Comando on, Comando off){
        comandoON[slot] = on;
        comandoOFF[slot] = off;
    }
}
