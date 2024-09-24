public abstract class Figura {
    public abstract void calcularArea();
}

public class Triangulo extends Figura {
    private double base;
    private double altura;

    public Triangulo(double base, double altura) {
        this.base = base;
        this.altura = altura;
    }

    @Override
    public void calcularArea() {
        System.out.println("////////////////////////////////////////////");
        System.out.println("Calcula el area de un triangulo");
        double result = base * altura;
        result = result / 2;
        System.out.println("El area es: " + result);
    }
}

public class Circulo extends Figura {
    private double diametro;
    private double pi = 3.14;

    public Circulo(double diametro) {
        this.diametro = diametro;
    }

    @Override
    public void calcularArea() {
        System.out.println("////////////////////////////////////////////");
        System.out.println("Calcula el area de un circulo");
        double radio = diametro / 2;
        double result = pi * radio * radio;
        System.out.println("El area de el circulo es: " + result + "²");
    }
}

public class Main {
    public static void main(String[] args) {
        Circulo circulo = new Circulo(100);
        circulo.calcularArea();
        Triangulo triangulo = new Triangulo(100, 100);
        triangulo.calcularArea();
    }
}