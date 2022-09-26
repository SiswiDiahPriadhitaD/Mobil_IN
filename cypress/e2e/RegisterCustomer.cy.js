describe('empty spec', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    cy.get(':nth-child(5) > .btn').click()
    cy.get(':nth-child(3) > #form2Example18').type('Gustania')
    cy.get(':nth-child(4) > #form2Example18').type('gustaa@gmail.com')
    cy.get(':nth-child(5) > #form2Example28').type('gustania09')
    cy.get(':nth-child(6) > #form2Example28').type('gustania09')
    cy.get('.btn').click()

  })
})