<?php
/**
 * O arquivo de template principal (Fallback)
 * Necessário para o WordPress validar o tema.
 */
get_header(); ?>

<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="mb-8">
                        <h1 class="text-4xl font-heading font-black text-slate-900"><?php the_title(); ?></h1>
                    </header>
                    <div class="prose prose-slate max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>Nenhum conteúdo encontrado.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
