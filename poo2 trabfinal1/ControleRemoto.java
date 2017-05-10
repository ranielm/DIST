import java.util.ArrayList;
public class ControleRemoto
{
    Comando comandos[] = new Comando[2];
    public ControleRemoto(){}
    public void setComando(Comando comando,int n){
        this.comandos[n] = comando;
    }
    public void botãoFoiPressionado(int n){
        this.comandos[n].executar();
    }

}
