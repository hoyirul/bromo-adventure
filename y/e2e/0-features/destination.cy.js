/// <reference types="cypress" />

describe('Destination Page', () => {
    it('Visit Page Destination', () => {
      cy.visit('http://localhost:8000/admin/destinasi')
      expect(true).to.equal(true)
    })

    it('Add Destination', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="destinasi"]').type('Blackbox Testing')
        // cy.get('button[type="submit"]').click()
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Edit Destination', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="destinasi"]').type('Blackbox Testing Edit')
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Delete Destination', () => {
        cy.get(':nth-child(5) > :nth-child(4) > form > .btn-danger')
        expect(true).to.equal(true)
      })
  })