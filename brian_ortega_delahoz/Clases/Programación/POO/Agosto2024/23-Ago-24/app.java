class HelloWorld {
    public static void main(String[] args) {
        Perro perro = new Perro();
        perro.patas = 4;
        perro.hacerSonido();

        Gato gato = new Gato();
        gato.patas = 4;
        gato.hacerSonido();
    }
}

interface Animal {
    void hacerSonido();
}

class Perro implements Animal {
    public int patas;

    @Override
    public void hacerSonido() {
        System.out.println("Guau!");
    }
}

class Gato implements Animal {
    public int patas;

    @Override
    public void hacerSonido() {
        System.out.println("Miau!");
    }
}
