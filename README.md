# solidOpenClosePrinciple

/*
 * Open for extension but closed for modification principle (SOLID)
 *
 * in this application, class AreaCalculator has a calculate method that will return
 * the area of a shape.
 *
 * If more shapes are added and we need to get the area of the shapes,
 * we do not need to modify the calculate method because we can simply
 * create a new class for the shape and extend it from the ShapeInterface.
 *
 * The design of the calculate method implements the Dependency Inversion Principle
 * where the calculate method requires a call to a shape method, area(). area() is
 * required in all shapes that implement the ShapeInterface.
 *
 * This underlining contract with the interface requires the calculate method to
 * depend on its shape, rather than doing an area calculation for every shape. This
 * would break the open/close principle because you would need to modify the calculate
 * method each time you add a shape.
 *
 *
 */

php myCircleArea.php