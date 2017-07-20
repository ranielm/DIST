package controle.remoto;

public class ArCondicionado {
    private int temperatura;
    
    public void ligar(){
        System.out.println("Arcondicionado ON");
    }
    
    public void desligar(){
        System.out.println("Arcondicionado OFF");
    }
    
    public void setTemperatura(int t){
        if(t<14 && t>28){
            System.out.println("Temepratura invalida");
        }
        else{
            this.temperatura = t;
            System.out.println("A temperatura do arcondicionado e " + temperatura);
        }   
    }
}
