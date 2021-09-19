var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Practical = /** @class */ (function () {
    function Practical(tp, no) {
        this.type = tp;
        this.noOfPractical = no;
    }
    Practical.prototype.detailsOfPractical = function () {
        console.log("The Practical Name is :" + this.type);
        console.log("Practical number is " + this.noOfPractical);
    };
    return Practical;
}());
var Subject = /** @class */ (function (_super) {
    __extends(Subject, _super);
    function Subject(typ, noo) {
        return _super.call(this, typ, noo) || this;
    }
    return Subject;
}(Practical));
var childClassObj = new Subject("AIT", 4);
childClassObj.detailsOfPractical();
var rectangle = /** @class */ (function () {
    function rectangle(sd, ang, nm) {
        this.sides = sd;
        this.angles = ang;
        this.name = nm;
    }
    rectangle.prototype.detailsOfShape = function () {
        console.log("I am " + this.name + " and I have " + this.sides + " sides . I have " + this.angles + " angles.");
    };
    return rectangle;
}());
var squareObj = new rectangle(4, 4, "Square");
squareObj.detailsOfShape();
