# Foo

```mermaid
zenuml
    title Annotators
    @Actor Alice
    @Boundary Bob
    @Control Claude
    @Database Dave
    @Entity Emile
    @EC2 F
    @ECS G
    @RDS H
    @S3 I
    @IAM J
    @Lambda K
    Alice->Bob: Hi Bob
    Bob->Alice: Hi Alice
    Bob->Control: Hi Alice
    Bob->Dave: SQL
    Control->Emile: FooBar
    Emile->F: blablabla
    F->G: kkk
```
