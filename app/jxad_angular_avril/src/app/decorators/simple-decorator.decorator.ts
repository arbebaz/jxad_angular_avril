export default function simpleDecorator(args: any) {
  console.log(args);

  return function (target: any) {
    console.log('Hello depuis le simpleDecorator');
    console.log('Type de la cible :  ', typeof target);
    console.log('cible : ', target);

    Object.defineProperty(target.prototype, 'valeurDynamique1', {
      value: args.valeur1,
      writable: false,
    });

    Object.defineProperty(target.prototype, 'valeurDynamique2', {
      value: args.valeur2,
      writable: false,
    });
  };
}
