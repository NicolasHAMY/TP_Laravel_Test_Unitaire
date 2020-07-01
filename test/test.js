var assert = require('assert');

describe('New test', function () {
    console.log("coucou");
    describe('#indexOf()', function () {
        console.log("coucou2");

        it('resultat -1', function () {
            // console.log('hello3');
            assert.equal([1, 2, 3].indexOf(4), -1);
        });

        it('resultat 1', function () {
            //   console.log('hello4');
            assert.equal([1, 2, 3].indexOf(2), 1);
        });
    });
});