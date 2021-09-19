class Practical
    {
        type:string;
        noOfPractical:number;

        constructor(tp:string,no:number)
        {
            this.type=tp;
            this.noOfPractical=no;
        }

      detailsOfPractical()
      {
          console.log("The Practical Name is :"+this.type);
          console.log("Practical number is "+this.noOfPractical);

      }

    }

    class Subject extends Practical{
            constructor(typ:string,noo:number)
            {
                super(typ,noo);
            }
    }
    let childClassObj= new Subject ("AIT",4);
    childClassObj.detailsOfPractical();


    interface Shape
    {
            sides:number;
            angles:number;
            name:string;
            detailsOfShape();
    }

    class rectangle implements Shape{
         sides:number;
         angles:number;
         name:string;

         constructor(sd:number,ang:number,nm:string)
         {
             this.sides=sd;
             this.angles=ang;
             this.name=nm;
         }
         detailsOfShape()
         {
             console.log("I am "+this.name+" and I have "+this.sides+" sides . I have "+this.angles+" angles.");
         }
    }
    let squareObj=new rectangle(4,4,"Square");
    squareObj.detailsOfShape();

   