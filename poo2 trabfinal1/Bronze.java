public class Bronze extends Estado
{
    public Bronze(Usuario usuario){
        super(usuario);
        this.nome = "bronze";
    }
    public void setLimites(){
        this.limiteInferior_amizade = 0;
        this.limiteSuperior_amizade = 5;
        this.limiteInferior_curtidas = 0;
        this.limiteSuperior_curtidas = 10;
        this.limite_post = 100;
    }
    public void verificarEstado(){
        if(this.usuario.getAmigos() >= this.limiteSuperior_amizade && this.usuario.curtidas >= limiteSuperior_curtidas){
            this.usuario.setEstado(new Prata(this.usuario));
        }
    }
}
