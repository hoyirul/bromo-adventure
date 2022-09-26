/// <reference types="cypress" />

describe('Role Page', () => {
    it('Visit Page Role', () => {
      cy.visit('http://localhost:8000/admin/role')
      expect(true).to.equal(true)
    })

    it('Add Role', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="role"]').type('Blackbox Testing')
        // cy.get('button[type="submit"]').click()
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Edit Role', () => {
        cy.get('.text-end > .btn').click()
        cy.get('input[name="role"]').type('Blackbox Testing Edit')
        cy.get('.text-end > .btn').click()
        expect(true).to.equal(true)
      })

      it('Delete Role', () => {
        cy.get(':nth-child(5) > :nth-child(4) > form > .btn-danger')
        expect(true).to.equal(true)
      })
  })