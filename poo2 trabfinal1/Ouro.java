public class Ouro extends Estado 
{
    public Ouro(Usuario usuario){
        super(usuario);
        this.nome = "bronze";
    }
    public void setLimites(){
        this.limiteInferior_amizade = 10;
        this.limiteSuperior_amizade = 999;
        this.limiteInferior_curtidas = 20;
        this.limiteSuperior_curtidas = 999;
        this.limite_post = 9999;
    }
    public void verificarEstado(){
        if(this.usuario.getAmigos() < this.limiteInferior_amizade && this.usuario.curtidas < limiteInferior_curtidas){
            this.usuario.setEstado(new Prata(this.usuario));
        }
    }
}
