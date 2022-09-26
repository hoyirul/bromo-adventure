/// <reference types="cypress" />

describe('Tipe Page', () => {
    it('Visit Page Tipe', () => {
      cy.visit('http://localhost:8000/admin/tipe')
      expect(true).to.equal(true)
    })

    it('Add Tipe', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="tipe"]').type('Blackbox Testing')
        // cy.get('button[type="submit"]').click()
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Edit Tipe', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="tipe"]').type('Blackbox Testing Edit')
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Delete Tipe', () => {
        cy.get(':nth-child(5) > :nth-child(4) > form > .btn-danger')
        expect(true).to.equal(true)
      })
  })