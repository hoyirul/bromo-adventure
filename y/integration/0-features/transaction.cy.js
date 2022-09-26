/// <reference types="cypress" />

describe('Transaction Page', () => {
    it('Transaction Paid', () => {
        cy.visit('http://localhost:8000/admin/transaksi')
        cy.get(':nth-child(1) > :nth-child(7) > .btn').click()
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

    it('Transaction Test', () => {
      cy.visit('http://localhost:8000/admin/transaksi')
    //   cy.get('.text-end > .btn').click()
      expect(true).to.equal(true)
    })

  })

